<?php

namespace Sunaoka\Aws\Structures\Odb\SwitchoverAutonomousDatabase;

trait SwitchoverAutonomousDatabaseTrait
{
    /**
     * @param SwitchoverAutonomousDatabaseRequest $args
     * @return SwitchoverAutonomousDatabaseResponse
     */
    public function switchoverAutonomousDatabase(SwitchoverAutonomousDatabaseRequest $args)
    {
        $result = parent::switchoverAutonomousDatabase($args->toArray());
        return new SwitchoverAutonomousDatabaseResponse($result->toArray());
    }
}
