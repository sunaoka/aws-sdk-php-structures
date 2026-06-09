<?php

namespace Sunaoka\Aws\Structures\Odb\FailoverAutonomousDatabase;

trait FailoverAutonomousDatabaseTrait
{
    /**
     * @param FailoverAutonomousDatabaseRequest $args
     * @return FailoverAutonomousDatabaseResponse
     */
    public function failoverAutonomousDatabase(FailoverAutonomousDatabaseRequest $args)
    {
        $result = parent::failoverAutonomousDatabase($args->toArray());
        return new FailoverAutonomousDatabaseResponse($result->toArray());
    }
}
