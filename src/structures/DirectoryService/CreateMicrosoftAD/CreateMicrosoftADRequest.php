<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateMicrosoftAD;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $ShortName
 * @property string $Password
 * @property string|null $Description
 * @property Shapes\DirectoryVpcSettings $VpcSettings
 * @property 'Enterprise'|'Standard'|null $Edition
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateMicrosoftADRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ShortName?: string|null,
     *     Password: string,
     *     Description?: string|null,
     *     VpcSettings: Shapes\DirectoryVpcSettings,
     *     Edition?: 'Enterprise'|'Standard'|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
