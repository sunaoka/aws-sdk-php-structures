<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabaseCharacterSets;

trait ListAutonomousDatabaseCharacterSetsTrait
{
    /**
     * @param ListAutonomousDatabaseCharacterSetsRequest $args
     * @return ListAutonomousDatabaseCharacterSetsResponse
     */
    public function listAutonomousDatabaseCharacterSets(ListAutonomousDatabaseCharacterSetsRequest $args)
    {
        $result = parent::listAutonomousDatabaseCharacterSets($args->toArray());
        return new ListAutonomousDatabaseCharacterSetsResponse($result->toArray());
    }
}
