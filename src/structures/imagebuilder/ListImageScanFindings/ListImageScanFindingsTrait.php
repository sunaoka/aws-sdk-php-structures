<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindings;

trait ListImageScanFindingsTrait
{
    /**
     * @param ListImageScanFindingsRequest $args
     * @return ListImageScanFindingsResponse
     */
    public function listImageScanFindings(ListImageScanFindingsRequest $args)
    {
        $result = parent::listImageScanFindings($args->toArray());
        return new ListImageScanFindingsResponse($result->toArray());
    }
}
