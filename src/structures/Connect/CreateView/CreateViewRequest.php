<?php

namespace Sunaoka\Aws\Structures\Connect\CreateView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $ClientToken
 * @property 'PUBLISHED'|'SAVED' $Status
 * @property Shapes\ViewInputContent $Content
 * @property string|null $Description
 * @property string $Name
 * @property array<string, string>|null $Tags
 */
class CreateViewRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ClientToken?: string|null,
     *     Status: 'PUBLISHED'|'SAVED',
     *     Content: Shapes\ViewInputContent,
     *     Description?: string|null,
     *     Name: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
