<?php

namespace Sunaoka\Aws\Structures\Ssm\PutParameter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string $Value
 * @property 'String'|'StringList'|'SecureString'|null $Type
 * @property string|null $KeyId
 * @property bool|null $Overwrite
 * @property string|null $AllowedPattern
 * @property list<Shapes\Tag>|null $Tags
 * @property 'Standard'|'Advanced'|'Intelligent-Tiering'|null $Tier
 * @property string|null $Policies
 * @property string|null $DataType
 */
class PutParameterRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Value: string,
     *     Type?: 'String'|'StringList'|'SecureString'|null,
     *     KeyId?: string|null,
     *     Overwrite?: bool|null,
     *     AllowedPattern?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     Tier?: 'Standard'|'Advanced'|'Intelligent-Tiering'|null,
     *     Policies?: string|null,
     *     DataType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
