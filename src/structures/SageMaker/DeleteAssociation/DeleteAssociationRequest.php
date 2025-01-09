<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceArn
 * @property string $DestinationArn
 */
class DeleteAssociationRequest extends Request
{
    /**
     * @param array{
     *     SourceArn: string,
     *     DestinationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
