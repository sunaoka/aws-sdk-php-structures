<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListLabels;

trait ListLabelsTrait
{
    /**
     * @param ListLabelsRequest $args
     * @return ListLabelsResponse
     */
    public function listLabels(ListLabelsRequest $args)
    {
        $result = parent::listLabels($args->toArray());
        return new ListLabelsResponse($result->toArray());
    }
}
