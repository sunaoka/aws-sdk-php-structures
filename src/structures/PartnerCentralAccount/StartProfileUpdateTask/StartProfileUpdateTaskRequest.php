<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\StartProfileUpdateTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property string|null $ClientToken
 * @property Shapes\TaskDetails $TaskDetails
 */
class StartProfileUpdateTaskRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     ClientToken?: string|null,
     *     TaskDetails: Shapes\TaskDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
