<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetImageSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreId
 * @property string $imageSetId
 * @property string|null $versionId
 */
class GetImageSetRequest extends Request
{
    /**
     * @param array{
     *     datastoreId: string,
     *     imageSetId: string,
     *     versionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
