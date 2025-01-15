<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateTargetAccountConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $experimentTemplateId
 * @property string $accountId
 * @property string|null $roleArn
 * @property string|null $description
 */
class UpdateTargetAccountConfigurationRequest extends Request
{
    /**
     * @param array{
     *     experimentTemplateId: string,
     *     accountId: string,
     *     roleArn?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
