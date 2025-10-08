<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPreviewRotationShifts;

trait ListPreviewRotationShiftsTrait
{
    /**
     * @param ListPreviewRotationShiftsRequest $args
     * @return ListPreviewRotationShiftsResponse
     */
    public function listPreviewRotationShifts(ListPreviewRotationShiftsRequest $args)
    {
        $result = parent::listPreviewRotationShifts($args->toArray());
        return new ListPreviewRotationShiftsResponse($result->toArray());
    }
}
