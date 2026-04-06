<?php

namespace Sunaoka\Aws\Structures\FIS\DeleteTargetAccountConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $experimentTemplateId
 * @property string $accountId
 */
class DeleteTargetAccountConfigurationRequest extends Request
{
    /**
     * @param array{
     *     experimentTemplateId: string,
     *     accountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
