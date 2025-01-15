<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdatePublicSharingSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property bool|null $PublicSharingEnabled
 */
class UpdatePublicSharingSettingsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     PublicSharingEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
