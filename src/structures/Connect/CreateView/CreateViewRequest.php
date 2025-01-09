<?php

namespace Sunaoka\Aws\Structures\Connect\CreateView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ClientToken
 * @property 'PUBLISHED'|'SAVED' $Status
 * @property Shapes\ViewInputContent $Content
 * @property string $Description
 * @property string $Name
 * @property array<string, string> $Tags
 */
class CreateViewRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ClientToken?: string,
     *     Status: 'PUBLISHED'|'SAVED',
     *     Content: Shapes\ViewInputContent,
     *     Description?: string,
     *     Name: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
