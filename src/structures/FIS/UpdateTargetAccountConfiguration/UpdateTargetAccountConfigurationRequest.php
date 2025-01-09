<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateTargetAccountConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $experimentTemplateId
 * @property string $accountId
 * @property string $roleArn
 * @property string $description
 */
class UpdateTargetAccountConfigurationRequest extends Request
{
    /**
     * @param array{
     *     experimentTemplateId: string,
     *     accountId: string,
     *     roleArn?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
