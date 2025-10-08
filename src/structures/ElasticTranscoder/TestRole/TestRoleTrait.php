<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\TestRole;

trait TestRoleTrait
{
    /**
     * @param TestRoleRequest $args
     * @return TestRoleResponse
     */
    public function testRole(TestRoleRequest $args)
    {
        $result = parent::testRole($args->toArray());
        return new TestRoleResponse($result->toArray());
    }
}
