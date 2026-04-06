<?php

namespace Sunaoka\Aws\Structures\Macie\DisassociateS3Resources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $memberAccountId
 * @property list<Shapes\S3Resource> $associatedS3Resources
 */
class DisassociateS3ResourcesRequest extends Request
{
    /**
     * @param array{
     *     memberAccountId?: string|null,
     *     associatedS3Resources: list<Shapes\S3Resource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
