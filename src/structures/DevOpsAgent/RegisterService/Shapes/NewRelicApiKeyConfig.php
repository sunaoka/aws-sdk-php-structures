<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiKey
 * @property string $accountId
 * @property 'US'|'EU' $region
 * @property list<string>|null $applicationIds
 * @property list<string>|null $entityGuids
 * @property list<string>|null $alertPolicyIds
 */
class NewRelicApiKeyConfig extends Shape
{
    /**
     * @param array{
     *     apiKey: string,
     *     accountId: string,
     *     region: 'US'|'EU',
     *     applicationIds?: list<string>|null,
     *     entityGuids?: list<string>|null,
     *     alertPolicyIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
