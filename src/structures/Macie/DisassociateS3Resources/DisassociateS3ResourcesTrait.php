<?php

namespace Sunaoka\Aws\Structures\Macie\DisassociateS3Resources;

trait DisassociateS3ResourcesTrait
{
    /**
     * @param DisassociateS3ResourcesRequest $args
     * @return DisassociateS3ResourcesResponse
     */
    public function disassociateS3Resources(DisassociateS3ResourcesRequest $args)
    {
        $result = parent::disassociateS3Resources($args->toArray());
        return new DisassociateS3ResourcesResponse($result->toArray());
    }
}
