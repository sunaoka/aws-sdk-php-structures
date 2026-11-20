<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\UpdateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string $VersionId
 */
class FileRef extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     VersionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
