<?php

namespace Sunaoka\Aws\Structures\S3\RestoreObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Days
 * @property GlacierJobParameters $GlacierJobParameters
 * @property 'SELECT' $Type
 * @property 'Standard'|'Bulk'|'Expedited' $Tier
 * @property string $Description
 * @property SelectParameters $SelectParameters
 * @property OutputLocation $OutputLocation
 */
class RestoreRequest extends Shape
{
    /**
     * @param array{
     *     Days?: int,
     *     GlacierJobParameters?: GlacierJobParameters,
     *     Type?: 'SELECT',
     *     Tier?: 'Standard'|'Bulk'|'Expedited',
     *     Description?: string,
     *     SelectParameters?: SelectParameters,
     *     OutputLocation?: OutputLocation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
