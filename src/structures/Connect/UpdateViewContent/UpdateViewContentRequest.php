<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateViewContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ViewId
 * @property 'PUBLISHED'|'SAVED' $Status
 * @property Shapes\ViewInputContent $Content
 */
class UpdateViewContentRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ViewId: string,
     *     Status: 'PUBLISHED'|'SAVED',
     *     Content: Shapes\ViewInputContent
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
