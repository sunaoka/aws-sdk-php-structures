<?php

namespace Sunaoka\Aws\Structures\ElastiCache\TestMigration;

trait TestMigrationTrait
{
    /**
     * @param TestMigrationRequest $args
     * @return TestMigrationResponse
     */
    public function testMigration(TestMigrationRequest $args)
    {
        $result = parent::testMigration($args->toArray());
        return new TestMigrationResponse($result->toArray());
    }
}
