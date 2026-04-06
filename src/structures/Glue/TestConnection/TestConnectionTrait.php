<?php

namespace Sunaoka\Aws\Structures\Glue\TestConnection;

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
