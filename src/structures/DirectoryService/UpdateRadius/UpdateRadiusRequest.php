<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateRadius;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property Shapes\RadiusSettings $RadiusSettings
 */
class UpdateRadiusRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     RadiusSettings: Shapes\RadiusSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
