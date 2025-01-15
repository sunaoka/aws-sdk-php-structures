<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketIntelligentTieringConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property IntelligentTieringFilter|null $Filter
 * @property 'Enabled'|'Disabled' $Status
 * @property list<Tiering> $Tierings
 */
class IntelligentTieringConfiguration extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Filter?: IntelligentTieringFilter|null,
     *     Status: 'Enabled'|'Disabled',
     *     Tierings: list<Tiering>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
