<?php

namespace Sunaoka\Aws\Structures\FIS\CreateTargetAccountConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $experimentTemplateId
 * @property string $accountId
 * @property string $roleArn
 * @property string|null $description
 */
class CreateTargetAccountConfigurationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     experimentTemplateId: string,
     *     accountId: string,
     *     roleArn: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
