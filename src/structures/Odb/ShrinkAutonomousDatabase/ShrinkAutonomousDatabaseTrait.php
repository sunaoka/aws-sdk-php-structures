<?php

namespace Sunaoka\Aws\Structures\Odb\ShrinkAutonomousDatabase;

trait ShrinkAutonomousDatabaseTrait
{
    /**
     * @param ShrinkAutonomousDatabaseRequest $args
     * @return ShrinkAutonomousDatabaseResponse
     */
    public function shrinkAutonomousDatabase(ShrinkAutonomousDatabaseRequest $args)
    {
        $result = parent::shrinkAutonomousDatabase($args->toArray());
        return new ShrinkAutonomousDatabaseResponse($result->toArray());
    }
}
