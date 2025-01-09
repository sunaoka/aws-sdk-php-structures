<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateMicrosoftAD;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ShortName
 * @property string $Password
 * @property string $Description
 * @property Shapes\DirectoryVpcSettings $VpcSettings
 * @property 'Enterprise'|'Standard' $Edition
 * @property list<Shapes\Tag> $Tags
 */
class CreateMicrosoftADRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ShortName?: string,
     *     Password: string,
     *     Description?: string,
     *     VpcSettings: Shapes\DirectoryVpcSettings,
     *     Edition?: 'Enterprise'|'Standard',
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
