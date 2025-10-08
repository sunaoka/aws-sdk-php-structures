<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\UpdateFindings;

trait UpdateFindingsTrait
{
    /**
     * @param UpdateFindingsRequest $args
     * @return void
     */
    public function updateFindings(UpdateFindingsRequest $args)
    {
        parent::updateFindings($args->toArray());
    }
}
