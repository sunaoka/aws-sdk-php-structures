<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlowModules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Content
 * @property string|null $Description
 * @property 'ACTIVE'|'ARCHIVED'|null $State
 * @property 'PUBLISHED'|'SAVED'|null $Status
 * @property array<string, string>|null $Tags
 */
class ContactFlowModule extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     Content?: string|null,
     *     Description?: string|null,
     *     State?: 'ACTIVE'|'ARCHIVED'|null,
     *     Status?: 'PUBLISHED'|'SAVED'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
