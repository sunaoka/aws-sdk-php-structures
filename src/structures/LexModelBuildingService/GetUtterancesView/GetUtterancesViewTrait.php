<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetUtterancesView;

trait GetUtterancesViewTrait
{
    /**
     * @param GetUtterancesViewRequest $args
     * @return GetUtterancesViewResponse
     */
    public function getUtterancesView(GetUtterancesViewRequest $args)
    {
        $result = parent::getUtterancesView($args->toArray());
        return new GetUtterancesViewResponse($result->toArray());
    }
}
