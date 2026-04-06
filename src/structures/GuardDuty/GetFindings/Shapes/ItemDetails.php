<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property string|null $ItemPath
 * @property string|null $Hash
 * @property AdditionalInfo|null $AdditionalInfo
 */
class ItemDetails extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     ItemPath?: string|null,
     *     Hash?: string|null,
     *     AdditionalInfo?: AdditionalInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
