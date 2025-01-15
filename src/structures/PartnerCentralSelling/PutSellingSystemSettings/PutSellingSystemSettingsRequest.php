<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\PutSellingSystemSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string|null $ResourceSnapshotJobRoleIdentifier
 */
class PutSellingSystemSettingsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ResourceSnapshotJobRoleIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
