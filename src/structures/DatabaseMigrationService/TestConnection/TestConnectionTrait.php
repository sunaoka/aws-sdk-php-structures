<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\TestConnection;

trait TestConnectionTrait
{
    /**
     * @param TestConnectionRequest $args
     * @return TestConnectionResponse
     */
    public function testConnection(TestConnectionRequest $args)
    {
        $result = parent::testConnection($args->toArray());
        return new TestConnectionResponse($result->toArray());
    }
}
