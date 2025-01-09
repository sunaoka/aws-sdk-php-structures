<?php

namespace Sunaoka\Aws\Structures\Transfer\ListProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $ProfileId
 * @property string $As2Id
 * @property 'LOCAL'|'PARTNER' $ProfileType
 */
class ListedProfile extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     ProfileId?: string,
     *     As2Id?: string,
     *     ProfileType?: 'LOCAL'|'PARTNER'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
