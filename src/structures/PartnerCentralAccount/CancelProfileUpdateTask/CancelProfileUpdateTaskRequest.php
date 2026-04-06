<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\CancelProfileUpdateTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property string|null $ClientToken
 * @property string $TaskId
 */
class CancelProfileUpdateTaskRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     ClientToken?: string|null,
     *     TaskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
