<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateAutonomousDatabase;

trait UpdateAutonomousDatabaseTrait
{
    /**
     * @param UpdateAutonomousDatabaseRequest $args
     * @return UpdateAutonomousDatabaseResponse
     */
    public function updateAutonomousDatabase(UpdateAutonomousDatabaseRequest $args)
    {
        $result = parent::updateAutonomousDatabase($args->toArray());
        return new UpdateAutonomousDatabaseResponse($result->toArray());
    }
}
