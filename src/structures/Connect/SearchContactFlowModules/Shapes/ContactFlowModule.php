<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlowModules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property string $Content
 * @property string $Description
 * @property 'ACTIVE'|'ARCHIVED' $State
 * @property 'PUBLISHED'|'SAVED' $Status
 * @property array<string, string> $Tags
 */
class ContactFlowModule extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Id?: string,
     *     Name?: string,
     *     Content?: string,
     *     Description?: string,
     *     State?: 'ACTIVE'|'ARCHIVED',
     *     Status?: 'PUBLISHED'|'SAVED',
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
