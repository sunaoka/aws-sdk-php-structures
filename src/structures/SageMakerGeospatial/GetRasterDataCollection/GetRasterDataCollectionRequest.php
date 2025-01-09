<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetRasterDataCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class GetRasterDataCollectionRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
