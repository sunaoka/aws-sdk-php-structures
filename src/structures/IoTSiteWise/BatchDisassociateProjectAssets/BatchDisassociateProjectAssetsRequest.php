<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchDisassociateProjectAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 * @property list<string> $assetIds
 * @property string|null $clientToken
 */
class BatchDisassociateProjectAssetsRequest extends Request
{
    /**
     * @param array{
     *     projectId: string,
     *     assetIds: list<string>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
