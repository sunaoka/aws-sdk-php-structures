<?php

namespace Sunaoka\Aws\Structures\Odb\RebootAutonomousDatabase;

trait RebootAutonomousDatabaseTrait
{
    /**
     * @param RebootAutonomousDatabaseRequest $args
     * @return RebootAutonomousDatabaseResponse
     */
    public function rebootAutonomousDatabase(RebootAutonomousDatabaseRequest $args)
    {
        $result = parent::rebootAutonomousDatabase($args->toArray());
        return new RebootAutonomousDatabaseResponse($result->toArray());
    }
}
