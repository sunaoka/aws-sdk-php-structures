<?php

namespace Sunaoka\Aws\Structures\Transfer\ListProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $ProfileId
 * @property string|null $As2Id
 * @property 'LOCAL'|'PARTNER'|null $ProfileType
 */
class ListedProfile extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     ProfileId?: string|null,
     *     As2Id?: string|null,
     *     ProfileType?: 'LOCAL'|'PARTNER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
