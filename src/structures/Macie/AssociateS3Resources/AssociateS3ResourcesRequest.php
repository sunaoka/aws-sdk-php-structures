<?php

namespace Sunaoka\Aws\Structures\Macie\AssociateS3Resources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $memberAccountId
 * @property list<Shapes\S3ResourceClassification> $s3Resources
 */
class AssociateS3ResourcesRequest extends Request
{
    /**
     * @param array{
     *     memberAccountId?: string|null,
     *     s3Resources: list<Shapes\S3ResourceClassification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
