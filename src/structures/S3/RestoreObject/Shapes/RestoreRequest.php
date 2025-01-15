<?php

namespace Sunaoka\Aws\Structures\S3\RestoreObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Days
 * @property GlacierJobParameters|null $GlacierJobParameters
 * @property 'SELECT'|null $Type
 * @property 'Standard'|'Bulk'|'Expedited'|null $Tier
 * @property string|null $Description
 * @property SelectParameters|null $SelectParameters
 * @property OutputLocation|null $OutputLocation
 */
class RestoreRequest extends Shape
{
    /**
     * @param array{
     *     Days?: int|null,
     *     GlacierJobParameters?: GlacierJobParameters|null,
     *     Type?: 'SELECT'|null,
     *     Tier?: 'Standard'|'Bulk'|'Expedited'|null,
     *     Description?: string|null,
     *     SelectParameters?: SelectParameters|null,
     *     OutputLocation?: OutputLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
