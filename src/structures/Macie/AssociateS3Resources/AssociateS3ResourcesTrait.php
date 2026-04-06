<?php

namespace Sunaoka\Aws\Structures\Macie\AssociateS3Resources;

trait AssociateS3ResourcesTrait
{
    /**
     * @param AssociateS3ResourcesRequest $args
     * @return AssociateS3ResourcesResponse
     */
    public function associateS3Resources(AssociateS3ResourcesRequest $args)
    {
        $result = parent::associateS3Resources($args->toArray());
        return new AssociateS3ResourcesResponse($result->toArray());
    }
}
