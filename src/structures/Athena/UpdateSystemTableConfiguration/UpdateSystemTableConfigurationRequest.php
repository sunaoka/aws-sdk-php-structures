<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateSystemTableConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ALL' $TableName
 * @property string|null $KmsKeyArn
 */
class UpdateSystemTableConfigurationRequest extends Request
{
    /**
     * @param array{
     *     TableName: 'ALL',
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
