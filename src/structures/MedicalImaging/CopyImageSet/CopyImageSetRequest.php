<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\CopyImageSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreId
 * @property string $sourceImageSetId
 * @property Shapes\CopyImageSetInformation $copyImageSetInformation
 * @property bool $force
 */
class CopyImageSetRequest extends Request
{
    /**
     * @param array{
     *     datastoreId: string,
     *     sourceImageSetId: string,
     *     copyImageSetInformation: Shapes\CopyImageSetInformation,
     *     force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
