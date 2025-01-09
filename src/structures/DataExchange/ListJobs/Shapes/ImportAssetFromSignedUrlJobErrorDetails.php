<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssetName
 */
class ImportAssetFromSignedUrlJobErrorDetails extends Shape
{
    /**
     * @param array{AssetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
