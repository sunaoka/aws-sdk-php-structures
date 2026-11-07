<?php

namespace Sunaoka\Aws\Structures\Athena\CreateSystemTableConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property 'ALL' $TableName
 * @property string|null $KmsKeyArn
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateSystemTableConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     TableName: 'ALL',
     *     KmsKeyArn?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
