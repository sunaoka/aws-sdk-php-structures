<?php

namespace Sunaoka\Aws\Structures\Ssm\PutParameter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $Value
 * @property 'String'|'StringList'|'SecureString' $Type
 * @property string $KeyId
 * @property bool $Overwrite
 * @property string $AllowedPattern
 * @property list<Shapes\Tag> $Tags
 * @property 'Standard'|'Advanced'|'Intelligent-Tiering' $Tier
 * @property string $Policies
 * @property string $DataType
 */
class PutParameterRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     Value: string,
     *     Type?: 'String'|'StringList'|'SecureString',
     *     KeyId?: string,
     *     Overwrite?: bool,
     *     AllowedPattern?: string,
     *     Tags?: list<Shapes\Tag>,
     *     Tier?: 'Standard'|'Advanced'|'Intelligent-Tiering',
     *     Policies?: string,
     *     DataType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
