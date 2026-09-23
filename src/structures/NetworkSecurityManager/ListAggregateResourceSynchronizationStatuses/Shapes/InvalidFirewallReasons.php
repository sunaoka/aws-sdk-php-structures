<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListAggregateResourceSynchronizationStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConfigurationIssue>|null $incorrectSingleValueConfigurations
 * @property list<ConfigurationIssue>|null $missingAppendableConfigurationValues
 * @property list<ConfigurationIssue>|null $unexpectedAppendableConfigurationValues
 * @property list<ConfigurationIssue>|null $incorrectAppendableConfigurationOrder
 * @property list<ConfigurationIssue>|null $missingMergeableConfigurationValues
 * @property list<ConfigurationIssue>|null $unexpectedMergeableConfigurationValues
 */
class InvalidFirewallReasons extends Shape
{
    /**
     * @param array{
     *     incorrectSingleValueConfigurations?: list<ConfigurationIssue>|null,
     *     missingAppendableConfigurationValues?: list<ConfigurationIssue>|null,
     *     unexpectedAppendableConfigurationValues?: list<ConfigurationIssue>|null,
     *     incorrectAppendableConfigurationOrder?: list<ConfigurationIssue>|null,
     *     missingMergeableConfigurationValues?: list<ConfigurationIssue>|null,
     *     unexpectedMergeableConfigurationValues?: list<ConfigurationIssue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
