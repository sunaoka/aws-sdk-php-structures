<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabaseClones;

trait ListAutonomousDatabaseClonesTrait
{
    /**
     * @param ListAutonomousDatabaseClonesRequest $args
     * @return ListAutonomousDatabaseClonesResponse
     */
    public function listAutonomousDatabaseClones(ListAutonomousDatabaseClonesRequest $args)
    {
        $result = parent::listAutonomousDatabaseClones($args->toArray());
        return new ListAutonomousDatabaseClonesResponse($result->toArray());
    }
}
