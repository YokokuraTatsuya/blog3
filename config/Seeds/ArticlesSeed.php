<?php
use Migrations\AbstractSeed;

/**
 * Articles seed.
 */
class ArticlesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'user_id' => '1',
                'title' => 'First Post',
                'slug' => 'first-post',
                'body' => 'This is the first post.',
                'published' => '1',
                'created' => '2018-02-21 01:04:09',
                'modified' => '2018-02-21 01:04:09',
            ],
            [
                'id' => '3',
                'user_id' => '1',
                'title' => 'sample_text',
                'slug' => 'sample-text',
                'body' => 'sample sample sample',
                'published' => '0',
                'created' => '2018-02-21 08:18:29',
                'modified' => '2018-02-21 08:18:29',
            ],
            [
                'id' => '4',
                'user_id' => '3',
                'title' => 'add home button',
                'slug' => 'add-home-button',
                'body' => 'aaaaaaaaaaaaa',
                'published' => '0',
                'created' => '2018-02-21 16:00:59',
                'modified' => '2018-02-21 16:00:59',
            ],
            [
                'id' => '5',
                'user_id' => '3',
                'title' => 'サンプルサンプルサンプル',
                'slug' => 'sanpurusanpurusanpuru',
                'body' => 'サンプルサンプルサンプル',
                'published' => '0',
                'created' => '2018-02-21 16:01:37',
                'modified' => '2018-02-21 16:01:37',
            ],
            [
                'id' => '6',
                'user_id' => '3',
                'title' => 'aaaaaaaaaaaaaaaaaaaa',
                'slug' => 'aaaaaaaaaaaaaaaaaaaa',
                'body' => 'aaaaaaaaaaaaaaaaaaaa',
                'published' => '0',
                'created' => '2018-02-21 16:03:01',
                'modified' => '2018-02-21 16:03:01',
            ],
            [
                'id' => '7',
                'user_id' => '3',
                'title' => 'bbbbbbbbbbbbbbbb',
                'slug' => 'bbbbbbbbbbbbbbbb',
                'body' => 'bbbbbbbbbbbbbbbb',
                'published' => '0',
                'created' => '2018-02-21 16:03:17',
                'modified' => '2018-02-21 16:03:17',
            ],
        ];

        $table = $this->table('articles');
        $table->insert($data)->save();
    }
}
