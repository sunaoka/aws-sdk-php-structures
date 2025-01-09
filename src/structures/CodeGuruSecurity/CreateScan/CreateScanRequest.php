<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\CreateScan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Security'|'All' $analysisType
 * @property string $clientToken
 * @property Shapes\ResourceId $resourceId
 * @property string $scanName
 * @property 'Standard'|'Express' $scanType
 * @property array<string, string> $tags
 */
class CreateScanRequest extends Request
{
    /**
     * @param array{
     *     analysisType?: 'Security'|'All',
     *     clientToken?: string,
     *     resourceId: Shapes\ResourceId,
     *     scanName: string,
     *     scanType?: 'Standard'|'Express',
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
