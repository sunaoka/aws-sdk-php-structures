<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteAutonomousDatabase;

trait DeleteAutonomousDatabaseTrait
{
    /**
     * @param DeleteAutonomousDatabaseRequest $args
     * @return DeleteAutonomousDatabaseResponse
     */
    public function deleteAutonomousDatabase(DeleteAutonomousDatabaseRequest $args)
    {
        $result = parent::deleteAutonomousDatabase($args->toArray());
        return new DeleteAutonomousDatabaseResponse($result->toArray());
    }
}
