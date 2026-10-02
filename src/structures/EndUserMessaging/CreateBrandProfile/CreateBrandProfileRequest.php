<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\CreateBrandProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $brandProfileName
 * @property string|null $clientToken
 * @property bool|null $deletionProtectionEnabled
 * @property list<Shapes\Tag>|null $tags
 */
class CreateBrandProfileRequest extends Request
{
    /**
     * @param array{
     *     brandProfileName: string,
     *     clientToken?: string|null,
     *     deletionProtectionEnabled?: bool|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
