<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateLabel;

trait CreateLabelTrait
{
    /**
     * @param CreateLabelRequest $args
     * @return CreateLabelResponse
     */
    public function createLabel(CreateLabelRequest $args)
    {
        $result = parent::createLabel($args->toArray());
        return new CreateLabelResponse($result->toArray());
    }
}
