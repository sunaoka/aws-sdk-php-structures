<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketIntelligentTieringConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property IntelligentTieringFilter $Filter
 * @property 'Enabled'|'Disabled' $Status
 * @property list<Tiering> $Tierings
 */
class IntelligentTieringConfiguration extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Filter?: IntelligentTieringFilter,
     *     Status: 'Enabled'|'Disabled',
     *     Tierings: list<Tiering>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
